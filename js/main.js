// Handles the 'see more' button for men's boards
function showFirstRowMens() {
    //removes 'show less' button
    document.getElementById('second-mens').style.display = "none";
    //shows extra boards
    document.getElementById('second-row-mens').style.display = "inline-block";
    //shows the 'show less' button
    document.getElementById('button-less-mens').style.display = "inline-block";
    //show the 'show more' button
    document.getElementById('third-mens').style.display = "inline-block";

    console.log("click");
}

function removePreviousRow() {

    var firstRemove = document.getElementById('second-row-mens');
    firstRemove.remove();

    var secondRemove = document.getElementById('third-row-mens');
    secondRemove.remove();

    console.log('removal click');
}

function showSecondRowMens() {

    document.getElementById('third-row-mens').style.display = "block";
}

// Handles the 'see more' button for women's boards
function showMoreWomensBoards() {
    //removes the button
    document.getElementById('button-womens').style.display = "none";
    //shows extra boards
    document.getElementById('more-womens').style.display = "block";
    //shows the 'show less' button
    document.getElementById('button-less-womens').style.display = "inline-block";

    console.log("click");
}

// Handles the 'show less' women's boards button
function showLessWomensBoards() {
    //removes 'show less' button
    document.getElementById('button-less-womens').style.display = "none";
    //removes 'show more' button
    document.getElementById('more-womens').style.display = "none";
    //shows 'see more' button
    document.getElementById('button-womens').style.display = "inline-block";

    console.log("click");
}