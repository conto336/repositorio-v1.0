$(function () {
    $("#electronica").DataTable({
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        language: {
            lengthMenu: "Display _MENU_ records per page",
            zeroRecords: "Ningun usuario coincide con tu busqueda",
            info: "Se muestran _PAGE_ de _PAGES_ páginas",
            infoEmpty: "Usuario no encontrado",
            infoFiltered: "(filtrado de _MAX_ usuarios en total)",
        },
    });
});
$(function () {
    $("#industrial").DataTable({
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        language: {
            lengthMenu: "Display _MENU_ records per page",
            zeroRecords: "Ningun usuario coincide con tu busqueda",
            info: "Se muestran _PAGE_ de _PAGES_ páginas",
            infoEmpty: "Usuario no encontrado",
            infoFiltered: "(filtrado de _MAX_ usuarios en total)",
        },
    });
});
$(function () {
    $("#geologia").DataTable({
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        language: {
            lengthMenu: "Display _MENU_ records per page",
            zeroRecords: "Ningun usuario coincide con tu busqueda",
            info: "Se muestran _PAGE_ de _PAGES_ páginas",
            infoEmpty: "Usuario no encontrado",
            infoFiltered: "(filtrado de _MAX_ usuarios en total)",
        },
    });
});

$("#tableElectronica").click(function (e) {
    if (e.target.classList.contains("fa-recycle")) {
        e.preventDefault();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Estas seguro?",
                text: "Esta acción no se podra deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Borrar",
                cancelButtonText: "Cancelar",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons
                        .fire(
                            "Borrado!",
                            "Se ha borrado al usuario.",
                            "success"
                        )
                        .then((result) => {
                            if (result.isConfirmed) {
                                e.originalEvent.path[2].submit();
                            }
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Cancelado",
                        "Has cancelado la operación :)",
                        "error"
                    );
                }
            });
    }
    if (e.target.classList.contains("btn-danger")) {
        e.preventDefault();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Estas seguro?",
                text: "Esta acción no se podra deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Borrar",
                cancelButtonText: "Cancelar",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons
                        .fire(
                            "Borrado!",
                            "Se ha borrado al usuario.",
                            "success"
                        )
                        .then((result) => {
                            if (result.isConfirmed) {
                                e.originalEvent.path[1].submit();
                            }
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Cancelado",
                        "Has cancelado la operación :)",
                        "error"
                    );
                }
            });
    }
});

$("#tableIndustrial").click(function (e) {
    if (e.target.classList.contains("fa-recycle")) {
        e.preventDefault();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Estas seguro?",
                text: "Esta acción no se podra deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Borrar",
                cancelButtonText: "Cancelar",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons
                        .fire(
                            "Borrado!",
                            "Se ha borrado al usuario.",
                            "success"
                        )
                        .then((result) => {
                            if (result.isConfirmed) {
                                e.originalEvent.path[2].submit();
                            }
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Cancelado",
                        "Has cancelado la operación :)",
                        "error"
                    );
                }
            });
    }
    if (e.target.classList.contains("btn-danger")) {
        e.preventDefault();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Estas seguro?",
                text: "Esta acción no se podra deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Borrar",
                cancelButtonText: "Cancelar",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons
                        .fire(
                            "Borrado!",
                            "Se ha borrado al usuario.",
                            "success"
                        )
                        .then((result) => {
                            if (result.isConfirmed) {
                                e.originalEvent.path[1].submit();
                            }
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Cancelado",
                        "Has cancelado la operación :)",
                        "error"
                    );
                }
            });
    }
});

$("#tableGeologia").click(function (e) {
    if (e.target.classList.contains("fa-recycle")) {
        e.preventDefault();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Estas seguro?",
                text: "Esta acción no se podra deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Borrar",
                cancelButtonText: "Cancelar",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons
                        .fire(
                            "Borrado!",
                            "Se ha borrado al usuario.",
                            "success"
                        )
                        .then((result) => {
                            if (result.isConfirmed) {
                                e.originalEvent.path[2].submit();
                            }
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Cancelado",
                        "Has cancelado la operación :)",
                        "error"
                    );
                }
            });
    }
    if (e.target.classList.contains("btn-danger")) {
        e.preventDefault();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons
            .fire({
                title: "Estas seguro?",
                text: "Esta acción no se podra deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Borrar",
                cancelButtonText: "Cancelar",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons
                        .fire(
                            "Borrado!",
                            "Se ha borrado al usuario.",
                            "success"
                        )
                        .then((result) => {
                            if (result.isConfirmed) {
                                e.originalEvent.path[1].submit();
                            }
                        });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        "Cancelado",
                        "Has cancelado la operación :)",
                        "error"
                    );
                }
            });
    }
});
