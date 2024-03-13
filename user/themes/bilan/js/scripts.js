console.log("Hello !");
    document.addEventListener('DOMContentLoaded', function() {
        var paragraphs = document.querySelectorAll('p');
        var classes = ["pos-1", "pos-2", "pos-3"];
        console.log(paragraphs);

        paragraphs.forEach(function(paragraph) {
            var randomClass = classes[Math.floor(Math.random() * classes.length)];
            paragraph.classList.add(randomClass);
        });
    });