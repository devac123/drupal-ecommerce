let dev = true;
if(dev){
    function print(Str){
        console.log(Str);
    }
}
var ele = document.getElementById('main-menu-link-contentad491e62-adf9-41a5-a3b0-d6275ec599fa')


const xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        let res = JSON.parse(xhttp.responseText)
       // Typical action to be performed when the document is ready:
        const maodalBody = document.getElementById('notifications_desc')
        

        for (const notify in res) {
            const para = document.createElement("div");
            
            para.innerText = "The "+res[notify]+" Node has been created";
            para.classList.add("alert")
            para.classList.add("alert-primary")
            maodalBody.append(para);
            


      }
    }
};
xhttp.open("GET", "http://localhost/ecommerce/web/get/example/api", true);
xhttp.send();