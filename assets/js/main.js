const musicData = [
    // Replace with your actual music data
    {
      imagen: "./img/guantanamera-pitbull.jpg",
      nombre: "Guantanamera",
      artista: "Pitbull",
      apps: ["Spotify", "Apple Music"],
    },
    {
      imagen: "url/to/image2.jpg",
      nombre: "Canción 2",
      artista: "Artista 2",
      apps: ["Deezer", "Amazon Music"],
    },
    // Add more music data objects here
  ];
  
  const musicTable = document.querySelector(".musica-destacada tbody");
  
  musicData.forEach(musica => {
    const row = document.createElement("tr");
  
    const imagenCell = document.createElement("td");
    const imagen = document.createElement("img");
    imagen.src = musica.imagen;
    imagenCell.appendChild(imagen);
  
    const nombreCell = document.createElement("td");
    nombreCell.textContent = musica.nombre;
  
    const artistaCell = document.createElement("td");
    artistaCell.textContent = musica.artista;
  
    const appsCell = document.createElement("td");
    appsCell.innerHTML = musica.apps.join(", "); // Join apps array into comma-separated string
  
    row.appendChild(imagenCell);
    row.appendChild(nombreCell);
    row.appendChild(artistaCell);
    row.appendChild(appsCell);
  
    musicTable.appendChild(row);
  });
  