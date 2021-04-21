var colorArray = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
    '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
    '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A'];

var lastName = "AMAR";
var length = lastName.length * 2;
var counter = 1;

function creatRectangle(length) {
    counter++;
    var recObj = document.createElement('section');
    var main = document.getElementsByTagName("main")[0];
    var randColor = colorArray[Math.floor(Math.random() * colorArray.length)];
    recObj.style.backgroundColor = randColor;
    if (length != 1) {
        recObj.onclick = function () {
            if (!recObj.firstChild) {
                addImg(recObj);
                if (length % 3 == 0) {
                    recObj.style.backgroundImage = "none";
                }
            }
            else {
                delImg(recObj, randColor);
                if (length % 3 == 0) {

                    recObj.style.backgroundImage = "url('images/star.png')";
                    recObj.style.backgroundRepeat = "no-repeat";
                    recObj.style.backgroundPosition = "top right";
                }

            }

        }
    }
    if (length % 3 == 0) {
        recObj.style.backgroundImage = "url('images/star.png')";
        recObj.style.backgroundRepeat = "no-repeat";
        recObj.style.backgroundPosition = "top right";
    }

    if (length == 1) {
        recObj.plusObj = document.createElement('section');
        recObj.plusObj.className = "plus";
        recObj.plusObj.onclick = function () {
            console.log(counter);
            creatRectangle(counter);
        }
        recObj.appendChild(recObj.plusObj);
    }
    main.appendChild(recObj);
}

function addImg(recObj) {
    var img = document.createElement("img");
    img.src = "images/smile.jpg";
    recObj.style.backgroundColor = "white";
    img.alt = "Shir";
    img.title = "Shir";
    recObj.appendChild(img);

}

function delImg(recObj, randColor) {
    var child = recObj.getElementsByTagName("*")
    recObj.removeChild(child[0]);
    recObj.style.backgroundColor = randColor;
}

function RectangeleManeger() {
    for (var i = 1; i <= length; i++) {
        creatRectangle(i);
    }
}




