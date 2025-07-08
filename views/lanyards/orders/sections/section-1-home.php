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
    //  alert(JSON.stringify(data));
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
  function function drawOrders(data) {
  const container = document.getElementById("organize_order_lanyards_for_you");
  container.innerHTML = "";

  data.forEach(orderEntry => {
    const { order, user, address, jobs } = orderEntry;

    let jobDetails = jobs.map(job => {
      let content = `
        <div>
          <h4>${job.name}</h4>
          <p>Price per unit: ${job.price_per_unit}</p>
          <p>Amount: ${job.amount}</p>
          <p>Total: ${job.total}</p>`;

      if (job.artwork) {
        content += `
          <div>
            <strong>Artwork:</strong><br>
            <img src="${job.artwork.linkLeftImage}" alt="Left Artwork" style="width:100px;"><br>
            <img src="${job.artwork.linkRightImage}" alt="Right Artwork" style="width:100px;">
          </div>`;
      }

      content += `</div>`;
      return content;
    }).join("");

    container.innerHTML += `
      <div class="order-card">
        <h3>Order #${order.idOrder}</h3>
        <p>Status: ${order.status}</p>
        <p>Total: ${order.total}</p>
        <div>
          <strong>Customer:</strong> ${user.name} - ${user.email}<br>
          <strong>Address:</strong> ${address.street_address_1}, ${address.town_city}
        </div>
        ${jobDetails}
        <hr>
      </div>
    `;
  });
}

</script>
