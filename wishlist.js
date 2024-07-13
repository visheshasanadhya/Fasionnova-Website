let bag_arr = JSON.parse(localStorage.getItem("bag_arr")) || []
    
        let contain = JSON.parse(localStorage.getItem("wish_arr"));
        // var con=JSON.parse(localStorage.getItem("bag_arr"));
        // localStorage.setItem("bag_arr",JSON.stringify(contain)),
        contain.forEach(function(elem,index) {
            console.log(elem);
            var box=document.createElement("div");
            box.setAttribute("id","cover")
            var image=document.createElement("img");
            image.setAttribute("src",elem.image_url);
            image.setAttribute("id","image");
            image.style.position="relative"
            image.style.width="100%"
            image.style.display="flex";
            image.style.margin="auto"
            image.style.marginBottom="0px"
            image.style.position="relative"
            // image.append(remov)
            var remov=document.createElement("p");
            remov.innerText="X";
            remov.style.marginTop="16px"
            remov.style.color="gray"
            remov.style.borderRadius="50%"
            remov.style.border="0px"
            remov.style.backgroundColor="white"
            remov.setAttribute("id","remove");
           
            remov.addEventListener("click",function(){
                chlnikal(elem,index);
            })
            // image.append(remov)
            var productname=document.createElement("h3");
            productname.innerText=elem.name;
            // productname.style.textAlign=""
            productname.setAttribute("id","name")
            productname.style.marginTop="10px";
            productname.style.textAlign = "center"
            productname.style.color="#535766"
            var ik = document.createElement("p");
                ik.innerText = "Brand :" + elem.brand;
                ik.style.color = "teal";
                ik.style.textAlign="center"
                ik.style.fontSize = "13px";
                ik.style.marginBottom = "10px";
            var pricebox=document.createElement("div");
            pricebox.setAttribute("id","pricebox");
            pricebox.style.marginTop="20px"
            //    pricebox.style.margin="auto"
            var price=document.createElement("p")
            price.innerText=elem.price;
            var offer=document.createElement("p")
            offer.innerText=elem.pprice;
            offer.setAttribute("id","ghat")
            var off=document.createElement("p");
            off.innerText=elem.off;
            off.setAttribute("id","less")
            pricebox.append(price,offer,off);
            var butt=document.createElement("div");
            butt.innerText="Move to Bag";
            butt.style.color="#ff3f6c";
            butt.style.borderColor="blue";
            butt.style.border="1px solid #bbb";
            butt.style.fontWeight="bold"
            butt.style.textAlign="center";
            butt.style.padding="7px";
            butt.style.fontSize="18px"
            butt.style.marginTop="15px";
            butt.style.cursor="pointer";
            butt.addEventListener("click",function(){
                 var objt1={
                     image_url:elem.image_url,
                     name:elem.name,
                     off:elem.off,
                     price:elem.price,
                    pprice:elem.pprice,
                    brand:elem.brand,
                 }
                event.preventDefault()
                bag_arr.push(index,1)
                console.log(index,1)
                localStorage.setItem("bag_arr",JSON.stringify(bag_arr))
                //  JSON.parse(localStorage.getItem("bag_arr")).push(objt1)
            })
            box.append(image,remov,productname,pricebox,butt);
            document.querySelector("#container").append(box)
        })
      

function chlnikal(elem,index) {
    contain.splice(index,1);
    localStorage.setItem("wish_arr",JSON.stringify(contain));
    window.location.reload();
}