import '../styles/main.css';

// detail.html

// Retrieve the ID from the query parameter
const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');

// Fetch the item's details from the API using the ID
const apiUrl = `https://my-json-server.typicode.com/Biella20/Inpeban/recomendation/${id}`;
axios.get(apiUrl)
  .then(response => {
    const item = response.data;
    // Access the details of the item and update the HTML elements on the detail.html page
    document.getElementById('itemName').textContent = item.name;
    document.getElementById('itemAddress').textContent = item.address;
    document.getElementById('itemCategory').textContent = item.category;
    document.getElementById('itemRating').textContent = item.rating;

    const itemImage = document.getElementById('itemImage');
    itemImage.src = item.image;
    itemImage.alt = item.name;
  })
  .catch(error => {
    console.error(error);
  });