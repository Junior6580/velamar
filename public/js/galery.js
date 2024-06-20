// Datos de las imágenes
const images = [
    "https://www.google.com/url?sa=i&url=https%3A%2F%2Felcomercio.pe%2Fsaltar-intro%2Fstreaming%2Fseries%2Fdemon-slayer-kimetsu-no-yaiba-cual-es-el-orden-cronologico-para-ver-el-anime-por-primera-vez-crunchyroll-tendencias-noticia%2F&psig=AOvVaw2kF8Vti7FrSUGKhI-l7bLy&ust=1709480428201000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCPjXkv_01YQDFQAAAAAdAAAAABAE",
    "../images/pescado2.jpg",
    "../images/pescado3.jpg",
    "../images/pescado4.jpg",
    "../images/pescado5.jpg",
  ];

  // Función para cargar las imágenes en la galería
  function cargarGaleria() {
    const galleryContainer = document.getElementById("gallery");

    images.forEach((imageSrc, index) => {
      const imgContainer = document.createElement("div");
      imgContainer.classList.add("col-md-4", "img-container");

      const imgElement = document.createElement("img");
      imgElement.setAttribute("src", imageSrc);
      imgElement.setAttribute("data-index", index); // Para identificar la posición de la imagen en el array

      // Agregar evento de clic a cada imagen
      imgElement.addEventListener("click", mostrarImagenCompleta);

      imgContainer.appendChild(imgElement);
      galleryContainer.appendChild(imgContainer);
    });
  }



  // Llamar a la función para cargar la galería cuando se cargue el DOM
  document.addEventListener("DOMContentLoaded", cargarGaleria);
