// Handles the 'see more' button for men's boards
function showMoreMensBoards() {

    document.getElementById('button-mens').style.display = "none";

    document.getElementById('more-mens').style.display = "block";

    document.getElementById('button-less-mens').style.display = "inline-block";
}

// Handles the 'show less' men's boards button
function showLessMensBoards() {
    //removes 'show less' button
    document.getElementById('button-less-mens').style.display = "none";
    //removes 'show more' button
    document.getElementById('more-mens').style.display = "none";
    //shows 'see more' button
    document.getElementById('button-mens').style.display = "inline-block";
}

// Handles the 'see more' button for women's boards
function showMoreWomensBoards() {
    //removes the button
    document.getElementById('button-womens').style.display = "none";
    //shows extra boards
    document.getElementById('more-womens').style.display = "block";
    //shows the 'show less' button
    document.getElementById('button-less-womens').style.display = "inline-block";
}

// Handles the 'show less' women's boards button
function showLessWomensBoards() {
    //removes 'show less' button
    document.getElementById('button-less-womens').style.display = "none";
    //removes 'show more' button
    document.getElementById('more-womens').style.display = "none";
    //shows 'see more' button
    document.getElementById('button-womens').style.display = "inline-block";
}