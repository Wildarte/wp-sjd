<?php get_header(); ?>

<style>
.gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 40px 10px;
}

.gallery-item {
  width: 33%;
  display: flex;
}

.gallery-item img {
  width: 100%;
  height: 200px;
  cursor: pointer;
  transition: transform 0.3s ease-in-out;
}

.gallery-item img:hover {
  transform: scale(1.1);
}

/* Estilo para a imagem em tela cheia */
.fullscreen-image {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 9999;
  cursor: zoom-out;
}

.prev, .next {
  position: fixed;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 255, 255, 0.5);
  padding: 10px;
  border: none;
  cursor: pointer;
}
.prev {
  left: 0;
}
.next {
  right: 0;
}

@media(max-width: 768px){
  .gallery-item {
    width: 50%;
    display: flex;
  }
}

@media(max-width: 600px){
  .gallery-item {
    width: 100%;
    display: flex;
  }
}

</style>

    <main>

        <section>
            <div class="container sec-min">
                <div class="bread_crumb">
                    <ul>
                        <li><a href="<?= home_url() ?>">Home</a></li>
                        <li><?= get_the_title() ?></li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="container">

                <h2 style="text-align: center;"><?= get_the_title() ?></h2>

                <div class="gallery">

                    <?php
                          $imgs = get_field('galeria_de_imagens');

                          foreach($imgs as $item):
                    ?>

                    <div class="gallery-item">
                        <img alt="img1" src="<?= $item ?>" />
                    </div>

                        <?php endforeach; ?>

                   
                </div>

            </div>
        </section>

    </main>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const galleryItems = document.querySelectorAll(".gallery-item img");
  let currentIndex;

  galleryItems.forEach(function(item, index) {
    item.addEventListener("click", function() {
      currentIndex = index;
      openFullscreenImage(currentIndex);
    });
  });

  function openFullscreenImage(index) {
    const fullscreenImage = document.createElement("img");
    fullscreenImage.src = galleryItems[index].src;
    fullscreenImage.alt = galleryItems[index].alt;
    fullscreenImage.classList.add("fullscreen-image");

    const prevButton = document.createElement("button");
    prevButton.textContent = "Previous";
    prevButton.classList.add("prev");
    prevButton.addEventListener("click", function() {
      if (currentIndex > 0) {
        currentIndex--;
        updateFullscreenImage(currentIndex);
      }
    });

    const nextButton = document.createElement("button");
    nextButton.textContent = "Next";
    nextButton.classList.add("next");
    nextButton.addEventListener("click", function() {
      if (currentIndex < galleryItems.length - 1) {
        currentIndex++;
        updateFullscreenImage(currentIndex);
      }
    });

    fullscreenImage.addEventListener("click", function() {
      document.body.removeChild(this);
      document.body.removeChild(prevButton);
      document.body.removeChild(nextButton);
    });

    document.body.appendChild(fullscreenImage);
    document.body.appendChild(prevButton);
    document.body.appendChild(nextButton);
  }

  function updateFullscreenImage(index) {
    const fullscreenImage = document.querySelector(".fullscreen-image");
    fullscreenImage.src = galleryItems[index].src;
    fullscreenImage.alt = galleryItems[index].alt;
  }
});


</script>

<?php get_footer(); ?>