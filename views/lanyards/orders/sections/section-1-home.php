<style media="screen">
  .containerUsersManagerBottoms{
    position: relative;
    background-color: rgb(92,108,128);
    border-radius: 5px;
    left: 50%;
    transform: translateX(-50%);
    min-width: 300px;
    max-width: 60%;
    border-radius: 1px solid black;
    padding: 2vw 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    align-items: center;
  }
</style>

<section class="bodyLogin">
  <!-- Section Title -->
  <h1 class="titleBodyLogin">Orders</h1>

  <div id="organize_order_lanyards_for_you" class="containerUsersManagerBottoms">
    <h1>Buenas</h1>
  </div>

</section>

<script type="text/javascript">
  getDataOrders();
  function getDataOrders(){
    // Define the URL and the JSON data you want to send
    const url = "../../../controller/lanyards/orders_lanyards.php"; // Replace with your API endpoint URL
    const data = {
      action: "getOrdersInfo"
    };

    fetch(url, {
    method: "POST", // HTTP POST method to send data
    headers: {
      "Content-Type": "application/json" // Indicate that you're sending JSON
    },
    body: JSON.stringify(data) // Convert the JSON object to a JSON string and send it
  })
    .then(response => {
      // Check if the response status is OK (2xx range)
      if (response.ok) {
        return response.json(); // Parse the response as JSON
      }
      // For other errors, throw a general network error
      throw new Error("Network error.");
    })
    .then(data => {

      drawOrders(data);

      console.log(JSON.stringify(data));
      // Process the response data

    })
    .catch(error => {
      // Handle specific errors (from throw in the .then block)
      console.error("Error:", error.message);
      alert(error.message); // Show the error message in an alert
    });
  }
  function drawOrders(dataValues){
    const data = dataValues;

    const container = document.getElementById("organize_order_lanyards_for_you");
    container.innerHTML = data.map(order => {
      const user = order.user;
      const address = order.address;
      const orderInfo = order.order;
      const jobsHTML = order.jobs.map(job => {
        let extraContent = '';
        if (job.text) {
          extraContent = `<p><strong>Text:</strong> ${job.text.contentText}</p>`;
        } else if (job.image) {
          extraContent = `<p><strong>Image:</strong> <img src="../../../${job.image.linkImage}" style="width: 100px;"></p>`;
        }
        const description = JSON.parse(job.description);
        return `
          <div class="job" style="margin-left: 20px; margin-bottom: 10px;">
            <p><strong>Job Name:</strong> ${job.name}</p>
            <p><strong>Description:</strong> ${description.material.type}, ${description.lanyard_type.type}, ${description.width.value}, ${description.side_printed.side}</p>
            ${extraContent}
          </div>
        `;
      }).join('');

      return `
        <div class="order" style="border: 1px solid #ccc; margin-bottom: 20px; padding: 10px;">
          <h3>Order #${orderInfo.idOrder}</h3>
          <p><strong>Status:</strong> ${orderInfo.status}</p>
          <p><strong>Total:</strong> $${parseFloat(orderInfo.total).toFixed(2)}</p>
          <p><strong>User:</strong> ${user.name} (${user.email})</p>
          <p><strong>Address:</strong> ${address.first_name} ${address.last_name}, ${address.company_name}, ${address.street_address_1}</p>
          <div class="jobs">
            <h4>Jobs</h4>
            ${jobsHTML}
          </div>
        </div>
      `;
    }).join('');
  }
</script>
