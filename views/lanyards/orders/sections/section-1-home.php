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

  <div class="containerUsersManagerBottoms">
    <h1>Buenas</h1>
  </div>

</section>

<script type="text/javascript">
  getDataOrders();
  function getDataOrders(){
    // Define the URL and the JSON data you want to send
    const url = "../../controller/lanyards/orders_lanyards.php"; // Replace with your API endpoint URL
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
      alert(data);
      // Process the response data

    })
    .catch(error => {
      // Handle specific errors (from throw in the .then block)
      console.error("Error:", error.message);
      alert(error.message); // Show the error message in an alert
    });
  }
</script>
