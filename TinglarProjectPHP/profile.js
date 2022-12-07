//----------Text Area Code----------//
function auto_grow(element = document.getElementById("txtArea")) 
{

    element.style.height = "60px"
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";

}

//----------Profile Picture Code----------//

    const image_input = document.querySelector("#image-input");
    image_input.addEventListener("change", function() {
        const reader = new FileReader();
        const label = document.querySelector("#title");
        reader.addEventListener("load", () => {
            const uploaded_image = reader.result;
            document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]);
        if(reader != null)
        {
        
            label.textContent = '';
            console.log("Sí :)");
        }
        else
        {
            console.log("NO ):");
        }
    });