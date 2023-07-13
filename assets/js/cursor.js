const handleCursor = () => {
    const cursor = document.getElementById("cursor");
    console.log(cursor)
    document.addEventListener("mousemove", (event) => {
        let y = event.pageY;
        let x = event.pageX;
        cursor.style.top = y + "px";
        cursor.style.left = x + "px";
    });
};
handleCursor();
