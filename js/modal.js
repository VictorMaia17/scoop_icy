// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function mostraModal() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function chamarTestaSession(event, id) {
  event.preventDefault();
    $.ajax({
        url: '../../controllerCliente.php',
        type: 'GET',
        data: { action: 'testaSession', id: id },
        dataType: 'html',
        success: function(response) { 
          $('body').append(response);
            
        },
        error: function(xhr, status, error) {
            console.error('Erro:', status, error);
            alert('Erro');
        }
    });

    return false;
}