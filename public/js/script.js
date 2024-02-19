var modaledit = document.getElementById("editModal");
modalEdit.addEventListener("show.bs.modal", function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget;
    // Extract info from data-bs-* attributes
    var slug = button.getAttribute("data-bs-whatever");
    var nama =
        button.parentElement.parentElement.querySelector("#nama").textContent;
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var Input = modalEdit.querySelector(".id");
    var namaInput = modalEdit.querySelector("#nama");
    //   var modalBodyInput = exampleModal.querySelector('.modal-body input')

    //   modalTitle.textContent = 'New message to ' + recipient
    Input.value = id;
    namaInput.value = nama;
});
