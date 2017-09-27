"use strict";

$(document).ready(function () {

    //verschiedene "States" die das Rad haben kann
    var states = {
        Cause: 1,
        Clarity: 2,
        Courage: 3,
        Commitment: 4
    };

    //Aktuelle Ausrichtung
    var currentRotation = states.Courage;

    $("#wheel_part1").click(function () {
        RotateTheWheel(states.Cause);
    });
    $("#wheel_part2").click(function () {
        RotateTheWheel(states.Clarity);
    });
    $("#wheel_part3").click(function () {
        RotateTheWheel(states.Commitment);
    });
    $("#wheel_part4").click(function () {
        RotateTheWheel(states.Courage);
    });


//Rotiert das Rad
function RotateTheWheel(targetRotation) {
    //Zuerst alle Klassen entfernen vom Wrapper (rotierung löschen) und von den dazugehörigen Textfeldern (alle unsichtbar)..
    $("#wheel_wrapper").removeClass(); //Wenn kein Parameter angegeben, entfert removeClass alle Klassen von dem Objekt
    $(".wheel_textfield").removeClass("activated");

    //...dann je nach wert der geklickt wurde, die richtige Rotierung zuweisen:
    switch (targetRotation) {

        case states.Cause:
            $("#wheel_wrapper").addClass("rotated45deg");
            $("#cause_textfield").addClass("activated");
            break;

        case states.Clarity:
            $("#wheel_wrapper").addClass("rotated315deg");
            $("#clarity_textfield").addClass("activated");
            break;

        case states.Commitment:
            $("#wheel_wrapper").addClass("rotated135deg");
            $("#commitment_textfield").addClass("activated");
            break;

        case states.Courage:
            $("#wheel_wrapper").addClass("rotated225deg");
            $("#courage_textfield").addClass("activated");
            break;


    }

}

});
