
let chumma = document.getElementsByClassName("testu");


for(let i =0;i<chumma.length;i++){
    let name = chumma[i].parentNode.parentNode.getElementsByTagName("td")[0].innerText;
    let email = chumma[i].parentNode.parentNode.getElementsByTagName("td")[1].innerText;
    let password = chumma[i].parentNode.parentNode.getElementsByTagName("td")[2].innerText;
    console.log(name+","+email+","+password)
}

// $(chumma).on('click',function(){
//     console.log(document.getElementsByClassName("testu")[0].parentNode.parentNode.getElementsByTagName("td")[0].innerText)
// })

