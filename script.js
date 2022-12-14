const sort = document.querySelector("#sort")
const ball = document.querySelector("#ball")

sort.onclick = () => {
	ball.classList.toggle("old")
}

ball.addEventListener("transitionend", (event) => {
	if (event.propertyName === "transform")
	{
		if (ball.classList.contains("old"))
		{
			window.location.assign("index.php?sort=old")
		}
		else
		{
			window.location.assign("index.php?sort=new")
		}
	}
})
