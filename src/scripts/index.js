import 'regenerator-runtime';
import '../styles/main.css';

const axios = require('axios');
const apiUrl = 'https://my-json-server.typicode.com/Biella20/Inpeban/recomendation';
const apiDataElement = document.getElementById('apiData');

axios.get(apiUrl)
  .then(response => {
    const data = response.data;
    data.forEach(item => {
      const itemElement = document.createElement('div');
      itemElement.classList.add('cardcard');

      const imageElement = document.createElement('img');
      imageElement.src = item.image;
      itemElement.appendChild(imageElement);

      const item2Element = document.createElement('div');
      item2Element.classList.add('deskripsi');

      const nameElement = document.createElement('p');
      const linkElement = document.createElement('a');
      linkElement.href = 'detail.html';
      linkElement.textContent = item.name;
      nameElement.appendChild(linkElement);
      item2Element.appendChild(nameElement);

      const ratingElement = document.createElement('p');
      ratingElement.textContent = '⭐' + item.rating;
      item2Element.appendChild(ratingElement);

      const categoryElement = document.createElement('p');
      categoryElement.textContent = item.category;
      item2Element.appendChild(categoryElement);

      itemElement.appendChild(item2Element);
      apiDataElement.appendChild(itemElement);
    });
  })
  .catch(error => {
    console.error(error);
  });

const api2Url = 'https://my-json-server.typicode.com/Biella20/Inpeban/gallery';
const api2DataElement = document.getElementById('api2Data');

axios.get(api2Url)
  .then(response => {
    const data2 = response.data;
    data2.forEach(item2 => {
      const itemElement = document.createElement('div');
      itemElement.classList.add('cardcard2');

      const imageElement = document.createElement('img');
      imageElement.src = item2.image;
      itemElement.appendChild(imageElement);

      const item2Element = document.createElement('div');
      item2Element.classList.add('deskripsi');

      const nameElement = document.createElement('p');
      nameElement.textContent = item2.name;
      item2Element.appendChild(nameElement);

      itemElement.appendChild(item2Element);
      api2DataElement.appendChild(itemElement);
    });
  })
  .catch(error => {
    console.error(error);
  });
