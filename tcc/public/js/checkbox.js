//checkbox
document.addEventListener('DOMContentLoaded', function() {


    // Impede a propagação do clique na checkbox para evitar que o card seja ativado
    const checkboxes = document.querySelectorAll('.toggle-card-checkbox');
    checkboxes.forEach(function(checkbox) {
      checkbox.addEventListener('click', function(event) {
        event.stopPropagation();
      });
    });
  });
