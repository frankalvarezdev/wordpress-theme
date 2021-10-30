const swup = new Swup();

class SandmyLazyImages {
    // inicia con la carga de la aimgen en cache
    startLoadImage(url) {
        let img = new Image();
        img.src = url;
        return img;
    }
    start() {

        // observador de las imagenes
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entrie, n) => {
                // si el elemento es visto por el usario
                if (entrie.isIntersecting) {

                    let element = entrie.target;

                    // comprobar si aun no fue agregado la imagen
                    if (!element.classList.contains('is-load')) {

                        // obtenemos la imagen desde el atributo data-src
                        let image = element.getAttribute('data-src');

                        // empezamos a cargar la image
                        this.startLoadImage(image).onload = () => {
                            element.style.backgroundImage = `url("${image}")`;

                            // agregamos la clase que hace referencia a que la imagen ya fue cargada
                            element.classList.add('is-loaded');
                        }
                    }

                }
            });
        });

        // obtiene todas la imagenes que hayan sido declaradas como lazy loading
        const images = document.querySelectorAll('.image.is-lazy');
        // agregamos las imagenes a observacion
        images.forEach((image, n) => observer.observe(image));
    }
}

const lazyImages = new SandmyLazyImages();
lazyImages.start();

swup.on('contentReplaced', function () {
   lazyImages.start(); 
});