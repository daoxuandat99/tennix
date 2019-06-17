<?php
include ('tennisTest.php');
//$tennisGame = new TennisGame();
//
//$tennisGame->getScore('TA', 'BA', 2, 0);
//
//echo $tennisGame;
$tennisGameTest = new TennisTest();
$tennisGameTest->setPlayer1Name("one");
$tennisGameTest->setPlayer2Name("two");
$tennisGameTest->setPlayer1Score("1");
$tennisGameTest->setPlayer2Score("2");
$player1Score = $tennisGameTest->getPlayer1Score();
$player2Score = $tennisGameTest->getPlayer2Score();
$player1Name = $tennisGameTest->getPlayer1Name();
$player2Name = $tennisGameTest->getPlayer2Name();
if ($player1Score == $player2Score)
{
    $tennisGameTest->getDeuce($player1Score);
}
else if ($player1Score>=4 || $player2Score>=4)
{
    $tennisGameTest->getWin($player1Score, $player1Name, $player2Score, $player2Name);
}
else
{
    $tennisGameTest->getScore($player1Score, $player2Score);
}
echo $tennisGameTest;