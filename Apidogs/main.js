const API_URL_RANDOM = 'https://api.thedogapi.com/v1/images/search?limit=4&api_key=live_jBD2KSNH4sVG1vADIKwGMbGHF0es83SbBOfci5Shf8hGSq71pzUAyr9yDX9QwfTT';
const API_URL_FAVORITES = 'https://api.thecatapi.com/v1/favourites?api_key=live_jBD2KSNH4sVG1vADIKwGMbGHF0es83SbBOfci5Shf8hGSq71pzUAyr9yDX9QwfTT';

const spanError = document.getElementById('error')

async function loadRandomDogs() {
    const res = await fetch(API_URL_RANDOM);
    const data = await res.json();
    console.log('Random')
    console.log(data)
    
    if (res.status !== 200) {
        spanError.innerHTML = "Hubo un error: " + res.status;
    } else {
        const img1 = document.getElementById('img1');
        const img2 = document.getElementById('img2');
        const img3 = document.getElementById('img3');
        const img4 = document.getElementById('img4');

        const btn1 = document.getElementById('btn1');
        const btn2 = document.getElementById('btn2');
        const btn3 = document.getElementById('btn3');
        const btn4 = document.getElementById('btn4');
        
        img1.src = data[0].url;
        img2.src = data[1].url;
        img3.src = data[2].url;
        img4.src = data[3].url;

        btn1.onclick = () => saveFavouriteDog(data[0].id);
        btn2.onclick = () => saveFavouriteDog(data[1].id);
        btn3.onclick = () => saveFavouriteDog(data[2].id);
        btn4.onclick = () => saveFavouriteDog(data[3].id);
        console.log(btn1);
    }
    
} 

async function loadFavouritesDogs() {
    const res = await fetch(API_URL_FAVORITES);
    const data = await res.json();
    console.log('Favoritos')
    console.log(data)
    
    if (res.status !== 200) {
        spanError.innerHTML = "Hubo un error: " + res.status + data.message;
    } else {
        data.forEach(dog => {
            const section = document.getElementById('favoriteDogs');
            const article = document.createElement('article');
            const img = document.createElement('img');
            const btn = document.createElement('button');
            const btnText = document.createTextNode('Eliminar de favoritos⭐');

          
            img.src = dog.image.url;
            img.width = 150;
            btn.appendChild(btnText);
            article.appendChild(img);
            article.appendChild(btn);
            section.appendChild(article);
        });
    }
} 

async function saveFavouriteDog(id)  {
    const res = await fetch(API_URL_FAVORITES, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          image_id: id
        }),
      });
      const data = await res.json();

    console.log('Save')
    console.log(res)

    if (res.status !== 200) {
        spanError.innerHTML = "Hubo un error: " + res.status + data.message;
    }
}

async function deleteFavouriteDog(id) {
    const res = await fetch(API_URL_FAVORITES, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            image_id: id
        }),
    });
    const data = await res.json();
}


loadRandomDogs();
loadFavouritesDogs();    