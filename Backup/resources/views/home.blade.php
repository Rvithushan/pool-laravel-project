@extends('layouts.app')



        <?php

            use Illuminate\Support\Facades\Auth;

            // Get the currently authenticated user...
            $user = Auth::user();

            // Get the currently authenticated user's ID...
            $id = Auth::id();
            
            echo $user;
            echo $id;

        ?>
