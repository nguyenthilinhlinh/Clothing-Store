$(document).ready(function () {
    //==============================
    //PRODUCT TABLE
    //==============================
    $.ajax({
        url: 'prd',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            $("#prdTbl").jsGrid({
                height: "500px",
                width: "",
                sorting: true,
                data: data[0],
                fields: [{
                        name: "id",
                        type: "number",
                        width: 50,
                        title: 'ID'
                    },
                    {
                        name: "product_name",
                        type: "text",
                        width: 150,
                        title: 'Product Name'
                    },
                    {
                        name: "category_id",
                        type: "number",
                        width: 50,
                        title: 'Category Id'
                    },
                    {
                        name: "price",
                        type: "text",
                        width: 75,
                        title: 'Price'
                    },
                    {
                        name: "quantity",
                        type: "text",
                        width: 80,
                        title: 'Quantity'
                    },
                    {
                        name: "status",
                        type: "text",
                        width: 60,
                        title: 'Status'
                    },
                    {
                        name: "created_date",
                        type: "text",
                        width: 200,
                        title: 'Created date'
                    },
                    {
                        name: "updated_date",
                        type: "text",
                        width: 200,
                        title: 'Updated date'
                    },
                    {
                        name: "id",
                        type: "text",
                        itemTemplate: function (value) {
                            //console.log(value);
                            let btn = $("<div>").attr("class", "ajax-btn");
                            let editbtn = $("<a>").attr("href", "#")
                                .attr("class", "ajax-get-product")
                                .attr("value", value)
                                .attr("data-toggle", "modal")
                                .attr("data-target", "#modal-lg-2")
                                .text("Details |");
                            let deletebtn = $("<a>").attr("href", "#")
                                .attr("class", "ajax-get-product")
                                .attr("value", value)
                                .attr("data-toggle", "modal")
                                .attr("data-target", "#modal-warning")
                                .text(" Delete");
                            btn.append(editbtn);
                            btn.append(deletebtn);
                            return btn;
                        },
                        title: "Option"
                    }
                ],
            });
            ajaxgetprd(); 
        },
        //console.log(data[0]);
        error: function (error) {
            console.log(error);
        }
    });
    //==============================
    //CATEGORY TABLE
    //==============================
    $.ajax({
        url: 'cat',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            $("#catTbl").jsGrid({
                height: "500px",
                width: "",
                sorting: true,
                data: data[0],
                rowClass: function (item) {
                    let stt = '';
                    item.status == 0 ? stt = 'unvailable' : stt = 'available'
                    return stt + ' item' + item.id;
                },
                fields: [{
                        name: "id",
                        type: "number",
                        width: 50,
                        title: 'ID'
                    },
                    {
                        name: "category_name",
                        type: "text",
                        width: 150,
                        title: 'Product Name'
                    },
                    {
                        name: "status",
                        type: "text",
                        width: 60,
                        title: 'Status',
                        itemTemplate: function (value) {
                            return value == 1 ? 'Available' : 'Unavailable'
                        }
                    },
                    {
                        name: "created_date",
                        type: "text",
                        width: 200,
                        title: 'Created date'
                    },
                    {
                        name: "id",
                        type: "text",
                        itemTemplate: function (value) {
                            //console.log(value);
                            let btn = $("<div>").attr("class", "ajax-btn");
                            let editbtn = $("<a>").attr("href", "#")
                                .attr("class", "ajax-get-cat")
                                .attr("value", value)
                                .attr("data-toggle", "modal")
                                .attr("data-target", "#modal-lg-c2")
                                .text("Edit |");
                            let deletebtn = $("<a>").attr("href", "#")
                                .attr("class", "ajax-get-cat")
                                .attr("value", value)
                                .attr("data-toggle", "modal")
                                .attr("data-target", "#modal-warning-c")
                                .text(" Delete");
                            btn.append(editbtn);
                            btn.append(deletebtn);
                            return btn;
                        },
                        title: "Option"
                    }
                ],
            });
            ajaxgetcat();
        },
        //console.log(data[0]);
        error: function (error) {
            console.log(error);
        }
    });

    //==============================
    //CONTACT TABLE
    //==============================
    $.ajax({
        url: 'cont',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            $("#conTbl").jsGrid({
                height: "500px",
                width: "",
                sorting: true,
                data: data[0],
                rowClass: function (item) {
                    let stt = '';
                    item.status == 0 ? stt = 'unvailable' : stt = 'available'
                    return stt + ' item' + item.id;
                },
                fields: [{
                        name: "contact_name",
                        type: "text",
                        width: 50,
                        title: 'Customer Name'
                    },
                    {
                        name: "email",
                        type: "text",
                        width: 150,
                        title: 'Email'
                    },
                    {
                        name: "phone",
                        type: "text",
                        width: 150,
                        title: 'Phone Number'
                    },                   
                    {
                        name: "created_date",
                        type: "text",
                        width: 200,
                        title: 'Created date'
                    },
                    {
                        name: "id",
                        type: "text",
                        itemTemplate: function (value) {
                            //console.log(value);
                            let btn = $("<div>").attr("class", "ajax-btn");
                            let editbtn = $("<a>").attr("href", "#")
                                .attr("class", "ajax-get-cont")
                                .attr("value", value)
                                .attr("data-toggle", "modal")
                                .attr("data-target", "#modal-lg-c2")
                                .text("Update |");
                            let deletebtn = $("<a>").attr("href", "#")
                                .attr("class", "ajax-get-ct")
                                .attr("value", value)
                                .attr("data-toggle", "modal")
                                .attr("data-target", "#modal-warning-c")
                                .text(" Delete");
                            btn.append(editbtn);
                            btn.append(deletebtn);
                            return btn;
                        },
                        title: "Option"
                    }
                ],
            });
            ajaxgetct();
        },
        //console.log(data[0]);
        error: function (error) {
            console.log(error);
        }
    });

    //==============================
    //FEEDBACK TABLE
    //==============================
    $.ajax({
        url: 'fb',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            $("#fbTbl").jsGrid({
                height: "500px",
                width: "",
                sorting: true,
                data: data[0],
                rowClass: function (item) {
                    let stt = '';
                    item.status == 0 ? stt = 'unvailable' : stt = 'available'
                    return stt + ' item' + item.id;
                },
                fields: [{
                        name: "id",
                        type: "number",
                        width: 50,
                        title: 'ID'
                    },
                    {
                        name: "customer_id",
                        type: "text",
                        width: 150,
                        title: 'Member ID'
                    },
                    {
                        name: "customer_name",
                        type: "text",
                        width: 150,
                        title: 'Customer Name'
                    },
                    {
                        name: "email",
                        type: "text",
                        width: 150,
                        title: 'Email'
                    },
                    {
                        name: "phone",
                        type: "text",
                        width: 150,
                        title: 'Phone Number'
                    },
                    {
                        name: "content",
                        type: "text",
                        width: 150,
                        title: 'Content',
                        itemTemplate: function (value) {
                            !value ? value = ' ' : value
                            return value.length >= 60 ? value.substring(0, 60) + '...' : value;
                        }
                    },
                    {
                        name: "created_date",
                        type: "text",
                        width: 200,
                        title: 'Created date'
                    },
                    {
                        name: "id",
                        type: "text",
                        title: "Option",
                        itemTemplate: function (value) {
                            //console.log(value);
                            let btn = $("<div>").attr("class", "ajax-btn");
                            let editbtn = $("<a>").attr("href", "#")
                                .attr("class", "ajax-get-fb")
                                .attr("value", value)
                                .attr("data-toggle", "modal")
                                .attr("data-target", "#modal-lg-fb")
                                .text("View Content |");
                            let deletebtn = $("<a>").attr("href", "#")
                                .attr("class", "ajax-get-fb")
                                .attr("value", value)
                                .attr("data-toggle", "modal")
                                .attr("data-target", "#modal-warning-fb")
                                .text(" Delete");
                            btn.append(editbtn);
                            btn.append(deletebtn);
                            return btn;
                        },
                    }
                ],
            });
            ajaxgetfb();
        },
        //console.log(data[0]);
        error: function (error) {
            console.log(error);
        }
    });


    let asset = $('#asset').attr("value");

    function getImage(file, img, imgid) {
        $("#images-container").append(img);
        let img_picker = $("<label>").addClass("brick tile-picker imgpkr").css("background-image", "url('" + asset + file + "')").attr("value", imgid);
        let ipkr_iput = $("<input>").attr("type", "checkbox");
        let ipkr_icon = $("<i>").addClass("tile-checked");
        img_picker.append(ipkr_iput);
        img_picker.append(ipkr_icon);
        $(".wall").append(img_picker);
    }

    let _token = $('meta[name="csrf-token"]').attr('content');
    function ajaxgetprd() {
        let rl_url;
        //=========selected product==========
        $('.ajax-get-product').bind("click", (function () {
            $("#images-container").empty();
            $(".wall").empty();
            let id = $(this).attr("value");
            let url = "selected/" + id;
            rl_url = url;
            reload = $(this)
            //url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $("#id_selected").val(data[0][0].id);
                    $("#product_name_selected").val(data[0][0].product_name);
                    $("#price_selected").val(data[0][0].price);
                    $("#price_selected").val(data[0][0].price);
                    $("#quantity_selected").val(data[0][0].quantity);
                    $("#description_selected").val(data[0][0].description);
                    $("#category_selected").val(data[1][0].category_id);
                    $("#status_selected").val(data[0][0].status);
                    $("#imgpkr_prdid").val(data[0][0].id);
                    $(".delBtn").attr("href", "deleteProduct/" + data[0][0].id);
                    $.each($('input[name="status"]'), function () {
                        if ($(this).attr("value") == data[0][0].status)
                            $(this).prop("checked", true);
                    })
                    console.log(data[2]);
                    $.each((data[2]), function () {
                        let file = '/' + this.file_path;
                        let img = $("<img>").attr("src", asset + file).css("width", "100px");
                        getImage(file, img, this.id);
                    });
                    $("#updimg").on("change", function (event) {
                        console.log(event);
                        $("#preview").empty();
                        if (event.target.files.length > 0) {
                            for (let file of event.target.files) {
                                let src = URL.createObjectURL(file);
                                let img_picker = $("<label>").addClass("brick tile-picker").css("background-image", "url('" + src + "')");
                                $("#preview").append(img_picker);
                            }

                        }
                    })
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }));
        //=========selected image (product update)==========
        let imgid = [];
        $('#delImg').bind("click", (function () {
            imgid = []
            let selectedimg = $('.imgpkr');
            selectedimg.each(function () {
                if ($(this).hasClass('active')) {
                    imgid.push($(this).attr("value"));
                }
            });
            if (confirm('Are you sure?')) {
                console.log(imgid);
                imgid.forEach(function (value, index, array) {
                    $.ajax({
                        url: 'deleteImage/' + value,
                        type: 'post',
                        success: function () {
                            //console.log(value)
                            //confirm('Delete Success!!');
                            //$( "#images-container" ).load(window.location.href + " #images-container" );
                            if (index + 1 == array.length) {
                                $("#images-container").empty();
                                $(".wall").empty();
                                $.ajax({
                                    url: rl_url,
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function (data) {
                                        $.each((data[2]), function () {
                                            let file = '/' + this.file_path;
                                            let img = $("<img>").attr("src", asset + file).css("width", "200px");
                                            getImage(file, img, this.id);
                                        });
                                    },
                                    error: function (error) {
                                        console.log(error);
                                    }
                                });
                            }
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    })
                })

            };
        }));
    }
    function ajaxgetcat() {
        //=========
        //=========selected category==========
        $('.ajax-get-cat').bind("click", (function () {
            var id = $(this).attr("value");
            var url = "selectedCat/" + id;
            //url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $("#id").val(data[0][0].id);
                    $("#category_name_old").val(data[0][0].category_name);
                    $(".delBtn").attr("href", "deleteCategory/" + data[0][0].id);
                    $.each($('input[name="status"]'), function () {
                        if ($(this).attr("value") == data[0][0].status)
                            $(this).prop("checked", true);
                    })
                    console.log(data);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        })); //setInterval(,100000);
    }
    function ajaxgetfb() {
        //=========selected feedack==========
        $('.ajax-get-fb').bind("click", (function () {
            let id = $(this).attr("value");
            let url = "selectedfb/" + id;
            let selectedrow = $('.item' + id)
            //url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $(".delBtn").bind("click", function () {
                        $.ajax({
                            url: "deletefeedback",
                            type: 'POST',
                            data: {
                                id: data[0][0],
                                _token: _token
                            },
                            success: function () {
                                console.log('deleted');
                                selectedrow.remove();
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        })
                    })
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }));
    }
    function ajaxgetct() {
         //=========selected contact==========
         $('.ajax-get-ct').bind("click", (function () {
            let id = $(this).attr("value");
            let url = "selectedct/" + id;
            let selectedrow = $('.item' + id)
            //url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $(".delBtn").bind("click", function () {
                        $.ajax({
                            url: "deletect",
                            type: 'POST',
                            data: {
                                id: data[0][0],
                                _token: _token
                            },
                            success: function () {
                                console.log('deleted');
                                selectedrow.remove();
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        })
                    })
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }));
    }

    $.ajax({
        url: 'getvisitregis',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            //console.log(data);
            //---------------------
            //- STACKED BAR CHART -
            //---------------------
            var areaChartData = {
                labels  : ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [
                  {
                    label               : 'Register',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : data[0]
                  },
                  {
                    label               : 'Visitors',
                    backgroundColor     : 'rgba(210, 214, 222, 1)',
                    borderColor         : 'rgba(210, 214, 222, 1)',
                    pointRadius         : false,
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data                : [28, 48, 40, 19, 86, 27, 90]
                  },
                ]
              }
            var barChartData = $.extend(true, {}, areaChartData)
            var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
            var stackedBarChartData = $.extend(true, {}, barChartData)

            var stackedBarChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }

            new Chart(stackedBarChartCanvas, {
                type: 'bar',
                data: stackedBarChartData,
                options: stackedBarChartOptions
            })
        },
        error: function (error) {
            console.log(error);
        }
    })
});
