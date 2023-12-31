$(function () {
    $('#submitChange').on('click', function () {
        var firstName = $('#firstName').val()
        var lastName = $('#lastName').val()
        var phone = $('#phone').val()
        var address = $('#address').val()
        var password = $('#password').val()
        var confPassword = $('#confPassword').val()

        var dataVar = {
            firstName: firstName,
            lastName: lastName,
            phone: phone,
            address: address,
            password: password,
            confPassword: confPassword,
            _token: token
        }

        $.ajax({
            url: '/user',
            type: 'PUT',
            data: dataVar,
            dataType: 'json'
        }).done(function (data) {
            if (data['status'] == 'Failed') {
                $('#modalTitle').text('Kesalahan')

                error = ''
                for (var i = 0; i < data['error'].length; i++) {
                    error += `<li>${data['error'][i]}</li>`
                }

                $('#modalBody').html(`<ul>${error}</ul>`)
                $('#modalContent').addClass('alert-danger')

                $('#modal').on('hidden.bs.modal', function () {
                    $('#modalTitle').text('Notifikasi')
                    $('#modalBody').html('');
                    $('#modalContent').removeClass('alert-danger')
                });

                var myModal = new bootstrap.Modal(document.getElementById('modal'), {
                    keyboard: false
                })
                myModal.show()
            }
            else if (data['status'] == 'Succeed') {
                $('#modalTitle').text('Berhasil')
                $('#modalContent').addClass('alert-success');
                $('#modalBody').html(`<p>Akun berhasil diubah.</p>`)

                $('#modal').on('hidden.bs.modal', function () {
                    $('#modalTitle').text('Notifikasi')
                    $('#modalBody').html('');
                    $('#modalContent').removeClass('alert-success')
                    window.location.href = '/profile'
                });

                var myModal = new bootstrap.Modal(document.getElementById('modal'), {
                    keyboard: false
                })
                myModal.show()
            }
        })
    })
})