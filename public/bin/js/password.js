$(document).ready(() => {
    // Login
    $('#btnPasswordLogin').on('click', () => {
        if ($('#passwordLogin').attr('type') == "password") {
            $('#btnPasswordLogin').html('<i class="fas fa-eye"></i>');
            $('#passwordLogin').attr('type','text');
        } else {
            $('#btnPasswordLogin').html('<i class="fas fa-eye-slash"></i>');
            $('#passwordLogin').attr('type','password');
        }
    })
    
    //Register
    $('#btnPassReg1').on('click', () => {
        if ($('#passwordRegister1').attr('type') == "password") {
            $('#btnPassReg1').html('<i class="fas fa-eye"></i>');
            $('#passwordRegister1').attr('type','text');
        } else {
            $('#btnPassReg1').html('<i class="fas fa-eye-slash"></i>');
            $('#passwordRegister1').attr('type','password');
        }
    })
    
    $('#btnPassReg2').on('click', () => {
        if ($('#passwordRegister2').attr('type') == "password") {
            $('#btnPassReg2').html('<i class="fas fa-eye"></i>');
            $('#passwordRegister2').attr('type','text');
        } else {
            $('#btnPassReg2').html('<i class="fas fa-eye-slash"></i>');
            $('#passwordRegister2').attr('type','password');
        }
    })
})