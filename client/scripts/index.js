/*
* Description: Add basic functions
*
* Author: Neo
*/
"use strict";

$(function() {
    // Creates a reference based on what button is clicked
    $("#navSearch").on("click", function() {
        sessionStorage.setItem("divisionPick", "none");
        location.href = "teams.php";
    });
    $("#masterBtn").on("click", function() {
        sessionStorage.setItem("divisionPick", "MasterChef");
        location.href = "teams.php";
    });
    $("#professionalBtn").on("click", function() {
        sessionStorage.setItem("divisionPick", "ProfessionalChef");
        location.href = "teams.php";
    });
    $("#amatuerBtn").on("click", function() {
        sessionStorage.setItem("divisionPick", "AmatuerChef");
        location.href = "teams.php";
    });
    $("#juniorBtn").on("click", function() {
        sessionStorage.setItem("divisionPick", "JuniorChef");
        location.href = "teams.php";
    });
});