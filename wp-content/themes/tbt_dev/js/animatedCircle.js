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
    //Zuerst alle Klassen entfernen..
    $("#wheel_wrapper").removeClass(); //Wenn kein Parameter angegeben, entfert removeClass alle Klassen von dem Objekt

    //...dann je nach wert den richtigen zuweisen:
    switch (targetRotation) {

        case states.Cause:
            $("#wheel_wrapper").addClass("rotated45deg");
            break;

        case states.Clarity:
            $("#wheel_wrapper").addClass("rotated315deg");
            break;

        case states.Commitment:
            $("#wheel_wrapper").addClass("rotated135deg");
            break;

        case states.Courage:
            $("#wheel_wrapper").addClass("rotated225deg");
            break;


    }

}

});
