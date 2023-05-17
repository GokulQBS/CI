
let chumma = document.getElementsByClassName("testu");
document.getElementsByClassName('popup_model')[0].style.display='none';



for(let i =0;i<chumma.length;i++){
    let element = $(chumma)[i];
    $(element).on('click',function(){
        let value=[];
        for(let j=0;j<3;j++){
            value.push(document.getElementsByClassName("testu")[i].parentNode.parentNode.getElementsByTagName("td")[j].innerText);
            if(j==2){
                console.log(document.getElementsByClassName("testu")[i].parentNode.parentNode.getElementsByTagName("td")[3].id);
                value.push(document.getElementsByClassName("testu")[i].parentNode.parentNode.getElementsByTagName("td")[3].id);
            }
        }
        document.getElementsByClassName('popup_model')[0].style.display='block';
        document.getElementById("popupinner").innerHTML = `
        <form action="update/${value[3]}" method="post">
        <div class="popup_close" id="popup_close">X</div>
        <h3 class="mb-4">Update the info and click Update button</h3>
          <input type="text" id="update_name" class="form-control" name="name" placeholder="${value[0]}" required>
          <input type="email" id="update_email" class="form-control my-4" name="email" placeholder="${value[1]}" required>
          <input type="text" id="update_password" class="form-control" name="password" placeholder="${value[2]}" required>
          <button class="btn btn-primary mt-3">Update</button>
          </form>`;
          $("#popup_close").on('click',function(){
            document.getElementsByClassName('popup_model')[0].style.display='none';
        });
          document.getElementById("update_name").value=value[0];
          document.getElementById("update_email").value=value[1];
          document.getElementById("update_password").value=value[2];
        value="";
    })
}