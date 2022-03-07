<?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11;">
    <div class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Status do Processo</strong>
            <small>Aluno</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-white">
            Sucesso
        </div>
    </div>
</div>

<!-- arrow function -->
<script>
    var toastElList = [].slice.call(document.querySelectorAll('.toast'));
    var toastList = toastElList.map(function(toastEl){
        return new bootstrap.Toast(toastEl)
    });

    toastList.forEach(toast => toast.show());
</script>

<!---------------------------------------------------------------------------------->
<?php endif; // Fim toast sucesso.

//Início Toast falha
if(isset($_GET['status']) && $_GET['status'] != 'success'):
?>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11;">
    <div class="toast bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Status do Processo</strong>
            <small>Aluno</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-white">
            Falhou
        </div>
    </div>
</div>

<!-- arrow function -->
<script>
    var toastElList = [].slice.call(document.querySelectorAll('.toast'));
    var toastList = toastElList.map(function(toastEl){
        return new bootstrap.Toast(toastEl)
    });

    toastList.forEach(toast => toast.show());
</script>

<?php endif; //Fim Toast falha ?>