$(document).ready(init);

function init() {
    // $("#btnLoadProducts").click(function () {
    //     $.getJSON("/api/products", function (data) {
    //         //console.table(data);
    //         $.each(data, function (index, dataObj) {
    //             $("#tblProducts tbody:last-child").append(
    //                 "<tr>" +
    //                     "<td>" + dataObj.id + "</td>" +
    //                     "<td>" + dataObj.name + "</td>" +
    //                     "<td>" + dataObj.sale_price + "</td>" +
    //                     "<td>" + dataObj.quantity + "</td>" +
    //                     "<td>" + dataObj.category.name + "</td>" +
    //                     "</tr>"
    //             );
    //         });
    //     });
    // });

    let tblProdcuts = new DataTable("#tblProductsDT", {
        ajax: "/api/products_dt",
        columns: [
            { data: "id" },
            { data: "name" },
            { data: "sale_price" },
            { data: "quantity" },
            { data: "category.name" },
        ],
    });
}
