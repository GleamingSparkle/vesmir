<?php
    $runes=array("Ral","Thul","Ohm","Tir","Ohm","Eld","Ort","Nef","Eth","Ith","Tal","Amn","Shael","Dol","Lum","Fal","Lem","Pul","Mal","Vex","Gul","Sur","Ber","Jah","Cham","Zod");
    $planets=array("Hephaestus","Janus","Dionysus","Nemesis","Pegasus","Kyané","Polyxené","Persefona","Kalliopé","Hemera","Aither","Iris","Fanes","Thetis","Apollo","Athena","Artemis","Demeter","Hades","Héra","Hestia","Aether","Aion","Chaos","Eros","Somnus","Erebus","Nyx","Eos","Oceanus","Phoebe","Rhea","Coeus","Selene","Asteria","Styx","Pallas","Prometheus","Perses","Hedone","Phobos","Icarus","Tyche","Hecate","Nilus","Daphne","Acmon","Chiron","Attis","Metope","Tethys","Sangarius","Pontus","Morpheus","Auxesia","Hebe","Eunomia","Lynx","Danae","Europa","Medusa","Pandora","Niobe","Hecuba","Pénelopé","Medea");
    shuffle($planets);
    $planetbank=array_merge($planets,$runes);
?>