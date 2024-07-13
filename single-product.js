let bag_arr = JSON.parse(localStorage.getItem("bag_arr")) || []
    let wish_arr = JSON.parse(localStorage.getItem("wish_arr")) || []
    let add_bag = document.getElementById("bag")
    let add_wish = document.getElementById("wish")
    let body = document.querySelector("body")
    let currentProduct = JSON.parse(localStorage.getItem("currentProduct"))
    let container = document.getElementById("container")
    let inner = document.querySelectorAll(".inner")
    let right = document.querySelector(".right")
    let title = document.querySelector(".title")
    let price = document.querySelector(".price-row")
    for (let i = 0; i < inner.length; i++) {
        let image = document.createElement("img")
        image.setAttribute("src", currentProduct.image_arr[i])
        inner[i].append(image)
    }
    let brand = document.createElement("h1")
    brand.textContent = currentProduct.brand 
    let name = document.createElement("h1")
    name.textContent = currentProduct.name
    title.append(brand, name)
    let discounted_price = document.createElement("strong")
    discounted_price.setAttribute("class", "discount")
    discounted_price.textContent = "Rs " + currentProduct.price 
    let actual_price = document.createElement("s")
    actual_price.textContent = "Rs " + currentProduct.pprice 
    let off = document.createElement("span")
    off.setAttribute("class", "offer")
    off.textContent = currentProduct.off
    price.append(discounted_price, actual_price, off)
    add_bag.addEventListener("click", addtobag)
    add_wish.addEventListener("click",addtowish)
    // add_wish.addEventListener("click", addtowish)

    function addtobag() {
        event.preventDefault()
        bag_arr.push(currentProduct)
        localStorage.setItem("bag_arr", JSON.stringify(bag_arr))
    }
    
    function addtowish(){
        event.preventDefault()
        wish_arr.push(currentProduct)
        localStorage.setItem("wish_arr",JSON.stringify(wish_arr))
    }