$(function () {
    function actions(id) {
        $(id).click(function (e) {
            if (e.target.classList.contains("fa-recycle")) {
                e.preventDefault();

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success ml-2",
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
                                .fire("Borrado!", "Archivo borrado", "success")
                                .then((result) => {
                                    if (result.isConfirmed) {
                                        e.originalEvent.path[2].submit();
                                    }
                                });
                        } else if (
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
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
                        confirmButton: "btn btn-success ml-2",
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
                                .fire("Borrado!", "Archivo borrado", "success")
                                .then((result) => {
                                    if (result.isConfirmed) {
                                        e.originalEvent.path[1].submit();
                                    }
                                });
                        } else if (
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire(
                                "Cancelado",
                                "Has cancelado la operación :)",
                                "error"
                            );
                        }
                    });
            }
        });
    }
    actions("#tableElectronica");
    actions("#tableIndustrial");
    actions("#tableGeologia");
});
