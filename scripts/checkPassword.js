function CheckPassword() {
    let password = document.getElementById('password').value;
    let confirm_password = document.getElementById('confirm_password').value;
    let message = document.getElementById('message');
    let checkbox = document.getElementById('check');

    if (password.length !== 0) {
        if (password === confirm_password) {
            if (checkbox.checked) {
                //message.textContent = 'Les mots de passe correspondent.';
                return true; // Permettre la soumission du formulaire
            } else {
                message.textContent = 'Veuillez accepter les conditions générales.';
                return false; // Empêcher la soumission du formulaire
            }
        } else {
            message.textContent = 'Les mots de passe ne correspondent pas.';
            return false; // Empêcher la soumission du formulaire
        }
    } else {
        message.textContent = 'Veuillez saisir un mot de passe.';
        return false; // Empêcher la soumission du formulaire
    }
}