let item ;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && this.status == 200) {
        var itemJson = this.responseText;
        itemJson = itemJson.replace(/\"IdActividad\":/g, "\"id\":")
        itemJson = itemJson.replace(/\"NombreActividad\":/g, "\"title\":")
        itemJson = itemJson.replace(/\"FechadePublicacion\":/g, "\"start\":")
        itemJson = itemJson.replace(/\"FechalimitedeEntrega\":/g, "\"end\":")
        itemJson = itemJson.replace(/\"Descripcion\":/g, "\"description\":")
        item = JSON.parse(itemJson);
        renderCalendar(item);
    }
};
xhttp.open("GET", 'http://127.0.0.1:8000/actividad/json', true);
xhttp.send();
function renderCalendar(item) {
    let itemList = item;
    ! function(e) {
        "use strict";
        var t = function() {
            this.$body = e("body"), this.$modal = e("#event-modal"), this.$event = "#external-events div.external-event", this.$calendar = e("#calendar"), this.$saveCategoryBtn = e(".save-category"), this.$categoryForm = e("#add-category form"), this.$extEvents = e("#external-events"), this.$calendarObj = null
        };
        t.prototype.onDrop = function(t, n) {
            var a = t.data("eventObject"),
                o = t.attr("data-class"),
                i = e.extend({}, a);
            i.start = n, o && (i.className = [o]), this.$calendar.fullCalendar("renderEvent", i, !0), e("#drop-remove").is(":checked") && t.remove()
        }, t.prototype.onEventClick = function(t, n, a) {
            var o = this,
                i = e("<form></form>");
            i.append("<label>Nombre Actividad</label>"), i.append("<div class='input-group'><input class='form-control' type=text value='" + t.title + "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>"), o.$modal.modal({
                backdrop: "static"
            }), o.$modal.find(".delete-event").show().end().find(".save-event").hide().end().find(".modal-body").empty().prepend(i).end().find(".delete-event").unbind("click").on("click", function() {
                o.$calendarObj.fullCalendar("removeEvents", function(e) {
                    return e._id == t._id
                }), o.$modal.modal("hide")
            }), o.$modal.find("form").on("submit", function() {
                return t.title = i.find("input[type=text]").val(), o.$calendarObj.fullCalendar("updateEvent", t), o.$modal.modal("hide"), !1
            })
        }, t.prototype.onSelect = function(t, n, a) {
            var o = this;
            o.$modal.modal({
                backdrop: "static"
            });
            var i = e('<form method="POST" action="/actividad/crear" class="form-horizontal">'+"@csrf"+'</form>');
            i.append("<div class='row'></div>"), i.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Nombre Actividad</label><input class='form-control' placeholder='Ingrese el nombre de la actividad' type='text' name='nombreA'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Categoria</label><select class='form-control' name='categoria'></select></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Descripcion</label><textarea class='form-control' placeholder='Ingrese la desc de la actividad' name='descripcion'></textarea></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Fecha limite</label><input class='form-control' placeholder='fecha limite' type='datetime-local' name='fechaLim'/></div></div>").append("<div class='col-md-6'><div class='form-group'><input class='form-control' placeholder='fecha inicio' type='datetime-local' name='fechaIni'/></div></div>").append("<div class='col-md-6'><div class='form-group'><button type='submit'>Create event</button></div></div>").find("select[name='categoria']").append("<option value='bg-danger'>Danger</option>").append("<option value='bg-success'>Success</option>").append("<option value='bg-dark'>Dark</option>").append("<option value='bg-primary'>Primary</option>").append("<option value='bg-pink'>Pink</option>").append("<option value='bg-info'>Info</option>").append("<option value='bg-warning'>Warning</option></div></div>"), o.$modal.find(".delete-event").hide().end().find(".save-event").show().end().find(".modal-body").empty().prepend(i).end().find(".save-event").unbind("click").on("click", function() {
                i.submit()
            }), o.$modal.find("form").on("submit", function() {
                var e = i.find("input[name='title']").val(),
                    a = (i.find("input[name='beginning']").val(), i.find("input[name='ending']").val(), i.find("select[name='categoria'] option:checked").val());
                return null !== e && 0 != e.length ? (o.$calendarObj.fullCalendar("renderEvent", {
                    title: e,
                    start: t,
                    end: n,
                    allDay: !1,
                    className: a
                }, !0), o.$modal.modal("hide")) : alert("Usted debe darle un nombre al evento"), !1
            }), o.$calendarObj.fullCalendar("unselect")
        }, t.prototype.enableDrag = function() {
            e(this.$event).each(function() {
                var t = {
                    title: e.trim(e(this).text())
                };
                e(this).data("eventObject", t), e(this).draggable({
                    zIndex: 999,
                    revert: !0,
                    revertDuration: 0
                })
            })
        }, t.prototype.init = function() {
            this.enableDrag();
            var t = new Date,
                n = (t.getDate(), t.getMonth(), t.getFullYear(), new Date(e.now())),
                o = this;
            o.$calendarObj = o.$calendar.fullCalendar({
                slotDuration: "00:15:00",
                minTime: "08:00:00",
                maxTime: "19:00:00",
                defaultView: "month",
                handleWindowResize: !0,
                height: e(window).height() - 100,
                header: {
                    left: "prev,next today",
                    center: "title",
                    right: "month,agendaWeek,agendaDay"
                },
                events: itemList,
                droppable: !0,
                eventLimit: !0,
                selectable: !0,
                select: function(e, t, n) {
                    o.onSelect(e, t, n)
                },
                eventClick: function(e, t, n) {
                    o.onEventClick(e, t, n)
                }

            }), this.$saveCategoryBtn.on("click", function() {
                var e = o.$categoryForm.find("input[name='category-name']").val(),
                    t = o.$categoryForm.find("select[name='category-color']").val();
                null !== e && 0 != e.length && (o.$extEvents.append('<div class="external-event bg-' + t + '" data-class="bg-' + t + '" style="position: relative;"><i class="fa fa-move"></i>' + e + "</div>"), o.enableDrag())
            })
        }, e.CalendarApp = new t, e.CalendarApp.Constructor = t
    }(window.jQuery),
    function(e) {
        "use strict";
        e.CalendarApp.init()
    }(window.jQuery);
};
