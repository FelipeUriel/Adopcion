function entar (){
    const usu = document.getElementById(`usuario`).value;
    const pass = document.getElementById(`clave`).value;
    console.log(usuario, clave);
    if (usu ==`Juan` && pass == `juan`){
        window.location.href = `index,html`;
}else {
    alert(`Eroor`)
} 

}