document.getElementById('periodo').addEventListener('change', function () {


    enableDisableCodigo(this.value);
});


function enableDisableCodigo(value){
    
    if (value) {
        fetch(`cargardatos.php?id=${value}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById('curso').innerHTML = data;
            document.getElementById('curso').disabled = false;
        })
        .catch(error => console.error('Error:', error));
    }
      
};

