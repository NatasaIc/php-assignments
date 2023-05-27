<?php

class UserView
{

    public function renderAllUsersAsList(array $users): void
    {
        echo "<ol>";
        foreach ($users as $user) {
            echo "<li>";
            echo "<a href='?id={$user["id"]}'>{$user['username']}</a>";
            echo "</li>";
        }
        echo "</ol>";
    }

    public function renderAllUserReviews(array $userReviews) {
        echo "<h3>Recensioner</h3>";
        if(count($userReviews)>0) {
            echo "<ul>";
            foreach($userReviews as $urev) {
                echo "<li>{$urev['review']}</li>";
            }
            echo "</ul>";
        } 
        else {
        echo "<p>Den här användaren har inga recencioner</p>";
    }
}
}
