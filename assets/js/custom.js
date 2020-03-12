/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */


/* ------------------------------------------------------------------------------
 *  # Config My Java Script
 * ---------------------------------------------------------------------------- */


var base_url = 'http://localhost/digitalwinning/todo/';

var divStart = ` <div class="card border-left-2 border-left-dark border-right-0 border-top-0 py-1 mb-1 rounded-0 col-md-auto"><div class="form-check form-check-inline form-check">`
var divEnd = `</div></div>`

/* ------------------------------------------------------------------------------
 *  # First run document ready
 * ---------------------------------------------------------------------------- */
$(document).ready(function () {

    // Date picker format
    $('.daterange-single').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'DD-MM-YYYY'
        }
    });

    // Keep last active tab
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });

    var activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        $('#tbs a[href="' + activeTab + '"]').tab('show');
    }

});



/* ------------------------------------------------------------------------------
 *  # Get todolist My Todos
 * ---------------------------------------------------------------------------- */

function myTodo() {
    $.ajax({
        url: base_url + 'getList',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            var baris = '';
            for (i = 0; i < data.length; i++) {
                baris +=
                    divStart +
                    `<label class="form-check-label"><input type="checkbox" class="change td1" data-oke="` + data[i].id_todos + `"  data-fouc></label>
                       <a href="detail?id=`+ data[i].id_todos + `&page=todolist" class="text-dark"><span>` + data[i].subject_todos + data[i].message_todos + `<i class="mi-swap-horiz ml-1"></i>
                      <strong class="text-danger">` + '<i class="mi-restore ml-1"></i> ' + timee(data[i].expired_todos) + `!</strong>
                    </span></a> `
                    + divEnd
            }
            // baris += '<strong><a href="" class="text-dark"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';

            $('#todo1').html(baris);
            $('.td1').uniform();
            $('#tbg-1').html(data.length);
            td1();
        }
    })

    $.ajax({
        url: base_url + 'getNoResponse',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            var nores = '';
            for (i = 0; i < data.length; i++) {
                nores +=
                    divStart + `
                <label class="form-check-label"><input type="checkbox" class="change td2" data-oke="`+ data[i].id_todos + `"  data-fouc></label>
                <a href="detail?id=`+ data[i].id_todos + `&page=todolist"><span class="text-danger">` + data[i].subject_todos + ` ` + data[i].message_todos + `<i class="mi-swap-horiz ml-1"></i><i class="mi-sentiment-dissatisfied mr-1"></i><strong>Please Click Me</strong></span></a>
                `+ divEnd
            }
            // nores += '<strong><a href="#" class="text-danger"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';

            $('#todo2').html(nores);
            $('.td2').uniform({
                wrapperClass: 'border-danger-600 text-danger-800'
            });
            $('#tbg-2').html(data.length);
            td2();

        }
    })


    $.ajax({
        url: base_url + 'getDone',
        type: 'GET',
        dataType: 'json',
        success: function (data) {

            var html = '';
            for (i = 0; i < data.length; i++) {
                html +=
                    divStart + `
                <label class="form-check-label"><input type="checkbox" class="change td3" checked data-oke="`+ data[i].id_todos + `"  data-fouc></label>
                <a href="detail?id=`+ data[i].id_todos + `&page=todolist"><span class="text-success"><del>` + data[i].subject_todos + ` ` + data[i].message_todos + `</del><i class="mi-swap-horiz ml-1"></i><i class="mi-check-box ml-1"></i> <strong>Completed At </strong>` + funSub(data[i].date_completed) + `</span></a>
                `+ divEnd
            }
            // html += '<strong><a href="#" class="text-success"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';
            $('#todo3').html(html);
            $('.td3').uniform({
                wrapperClass: 'border-success-600 text-success-800'
            });
            $('#tbg-3').html(data.length);
            td3();
        }
    })


}
/* ------------------------------------------------------------------------------
 *  End Get todolist My Todos
 * ---------------------------------------------------------------------------- */
/* ------------------------------------------------------------------------------
*  # Fungction Event
* ---------------------------------------------------------------------------- */

// Event Untuk My todolist
function td1() {
    $('.td1').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                myTodo();
            }
        });
    });
}

function td2() {
    $('.td2').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                myTodo();
            }
        });
    });
}

function td3() {
    $('.td3').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                myTodo();
            }
        });
    });
}

// end Event my Todolist

/* ------------------------------------------------------------------------------
 *  # Get todolist My Issign
 * ---------------------------------------------------------------------------- */

function myIssigned() {

    $.ajax({
        url: base_url + 'getIassign',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            var isign = '';
            for (i = 0; i < data.length; i++) {
                if (data[i].status == '0') {
                    isign +=
                        divStart + `
                <label class="form-check-label"><input type="checkbox" class="change issign1" data-oke="`+ data[i].id_todos + `"  data-fouc></label>
                <a href="detail?id=`+ data[i].id_todos + `&page=issign"><span class="text-primary">` + data[i].subject_todos + ` ` + data[i].message_todos + `<i class="mi-swap-horiz ml-1"></i><i class="icon-paperplane ml-1"></i><strong> ` + data[i].name_recived + `</strong> </span></a>
                <i class="icon-bookmark` + data[i].flag + ` ml-2 text-warning flag"></i>` + divEnd

                } else {
                    isign +=
                        divStart + `
                <label class="form-check-label"><input type="checkbox" checked class="change issign1" data-oke="`+ data[i].id_todos + `"  data-fouc></label>
                <a href="detail?id=`+ data[i].id_todos + `&page=issign"><span class="text-success"><del>` + data[i].subject_todos + ` ` + data[i].message_todos + `</del><i class="mi-swap-horiz ml-1"></i><i class="icon-paperplane ml-1"></i><strong> ` + data[i].name_recived + `</strong> Completed </span></a>
                <i class="icon-bookmark` + data[i].flag + ` ml-2 text-warning flag"></i>` + divEnd
                }


            }
            // nores += '<strong><a href="#" class="text-danger"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';

            $('#tab1_issign').html(isign);
            $('.issign1').uniform({
                wrapperClass: 'border-dark-600 text-dark-800'
            });
            $('#issigned-bg-1').html(data.length);
            issign1();
            clickFlag();
        }
    })

    $.ajax({
        url: base_url + 'getIssigned',
        type: 'get',
        dataType: 'json',
        success: function (data) {
            var baris = '';
            for (i = 0; i < data.length; i++) {
                baris +=
                    divStart +
                    `<label class="form-check-label"><input type="checkbox" class="change issign2" data-oke="` + data[i].id_todos + `"  data-fouc></label>
                    <a href="detail?id=`+ data[i].id_todos + `&page=issign" class="text-dark"><span>` + data[i].subject_todos + data[i].message_todos + `<i class="mi-swap-horiz ml-1"></i>
                      <strong class="text-danger">` + '<i class="mi-restore ml-1"></i> ' + timee(data[i].expired_todos) + `!</strong>
                    </span></a> `
                    + divEnd
            }
            // baris += '<strong><a href="" class="text-dark"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';

            $('#tab2_issign').html(baris);
            $('.issign2').uniform();
            $('#issigned-bg-2').html(data.length);
            issign2();
        }
    })

    $.ajax({
        url: base_url + 'getIssignedNores',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            var nores = '';
            for (i = 0; i < data.length; i++) {
                nores +=
                    divStart + `
                <label class="form-check-label"><input type="checkbox" class="change issign3" data-oke="`+ data[i].id_todos + `"  data-fouc></label>
                <a href="detail?id=`+ data[i].id_todos + `&page=issign"><span class="text-danger">` + data[i].subject_todos + ` ` + data[i].message_todos + `<i class="mi-swap-horiz ml-1"></i><i class="mi-sentiment-dissatisfied mr-1"></i><strong>Please Click Me</strong></span></a>
                `+ divEnd
            }
            // nores += '<strong><a href="#" class="text-danger"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';

            $('#tab3_issign').html(nores);
            $('.issign3').uniform({
                wrapperClass: 'border-danger-600 text-danger-800'
            });
            $('#issigned-bg-3').html(data.length);
            issign3();

        }
    })



    $.ajax({
        url: base_url + 'getIssignedDone',
        type: 'GET',
        dataType: 'json',
        success: function (data) {

            var html = '';
            for (i = 0; i < data.length; i++) {
                html +=
                    divStart + `
                <label class="form-check-label"><input type="checkbox" class="change issign4" checked data-oke="`+ data[i].id_todos + `"  data-fouc></label> 
                <a href="detail?id=`+ data[i].id_todos + `&page=issign"><span class="text-success"><del>` + data[i].subject_todos + ` ` + data[i].message_todos + `</del><i class="mi-swap-horiz ml-1"></i><i class="mi-check-box ml-1"></i> <strong>Completed At </strong>` + funSub(data[i].date_completed) + `</span></a>
                <i class="icon-bookmark`+ data[i].flag + ` ml-2 text-warning flag" data-id="` + data[i].id_todos + `"></i>` + divEnd

            }
            // html += '<strong><a href="#" class="text-success"><i class="mi-cached ml-1"></i> Load More . .</a></strong>';
            $('#tab4_issign').html(html);
            $('.issign4').uniform({
                wrapperClass: 'border-success-600 text-success-800'
            });
            $('#issigned-bg-4').html(data.length);
            issign4();
        }
    })


}

/* ------------------------------------------------------------------------------
 *  End Get todolist My Issign
 * ---------------------------------------------------------------------------- */

// Event Untuk My todolist
function issign1() {
    $('.issign1').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                myIssigned();
            }
        });
    });
}

function issign2() {
    $('.issign2').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                myIssigned();
            }
        });
    });
}

function issign3() {
    $('.issign3').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                myIssigned();
            }
        });
    });
}

function issign4() {
    $('.issign4').on('click', function () {
        const myid = $(this).data('oke');
        $.ajax({
            url: base_url + 'changestatus',
            type: 'post',
            data: {
                ids: myid,
            },
            success: function () {
                myIssigned();
            }
        });
    });
}

function clickFlag() {
    $('.flag').on('click', function () {
        const myid = $(this).data('id');
        $.ajax({
            url: base_url + 'flag2',
            type: 'GET',
            data: {
                ids: myid,
            },
            success: function () {
                myIssigned();
            }
        });
    });
}

// end Event my Todolist


/* ------------------------------------------------------------------------------
*  End Fungction Event
* ---------------------------------------------------------------------------- */

function funSub(strr) {
    var sbs = strr.split(' ');
    var tanggal = sbs[0].split('-');
    return tanggal[2] + '-' + tanggal[1] + '-' + tanggal[0] + ' ' + sbs[1];
}


function timee(time) {
    var sbs = time.split(' ');
    var jam = sbs[0].split(':');
    return jam[0] + ':' + jam[1] + ' Again !';
}


