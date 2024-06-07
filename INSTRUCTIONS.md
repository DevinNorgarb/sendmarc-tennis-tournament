
# Sendmarc Engineering Evaluation
We would like you to demonstrate your skills as a software engineer by showing us your best in software architecture and problem-solving.
You are tasked with creating a scoring system for the "game" component of a tennis match.


### 𝗧𝗵𝗲 𝗿𝘂𝗹𝗲𝘀 𝗳𝗼𝗿 𝗮 "𝗴𝗮𝗺𝗲" 𝗶𝗻 𝗮 𝘁𝗲𝗻𝗻𝗶𝘀 𝗺𝗮𝘁𝗰𝗵 𝗮𝗿𝗲 𝗮𝘀 𝗳𝗼𝗹𝗹𝗼𝘄𝘀:

• Zero to three points are given the terms "Love", "Fifteen", "Thirty", and "Forty" respectively.

• If both players have the same score below three points ("Forty") then the score is suffixed
  with "All" (Example: "Thirty All").

• If at least three points have been scored by both players, and the score is equal, then the
  score is "Deuce".

• If at least three points have been scored by both players but one player has one more
  point than the other, then the score for the player ahead is "Advantage".

• A game is won by the first player to score at least four points in total and at least two more
  points than their opponent.


### 𝗡𝗼𝘁𝗲𝘀:

• You only need to implement the logic for the "game" component. The "match" and "set"
  scoring are out of scope.

• You can use whichever language you feel most comfortable in.

• Please upload a zip file containing all of the files for this assessment.

## Objective 1.
### Create a class or classes that can score a tennis single "game" within a match.

𝗧𝗵𝗲 𝗺𝗮𝗶𝗻 𝗰𝗹𝗮𝘀𝘀 𝘀𝗵𝗼𝘂𝗹𝗱 𝗶𝗺𝗽𝗹𝗲𝗺𝗲𝗻𝘁 𝘁𝗵𝗲 𝗳𝗼𝗹𝗹𝗼𝘄𝗶𝗻𝗴 𝗶𝗻𝘁𝗲𝗿𝗳𝗮𝗰𝗲:

• `scoreboard(): text` 𝘙𝘦𝘵𝘶𝘳𝘯𝘴 𝘧𝘰𝘳𝘮𝘢𝘵𝘵𝘦𝘥 𝘴𝘵𝘳𝘪𝘯𝘨, 𝘦.𝘨:
        `"𝘍𝘪𝘧𝘵𝘦𝘦𝘯-𝘓𝘰𝘷𝘦", "𝘋𝘦𝘶𝘤𝘦", "𝘈𝘥𝘷𝘢𝘯𝘵𝘢𝘨𝘦 𝘗𝘭𝘢𝘺𝘦𝘳 1", "𝘞𝘰𝘯 𝘣𝘺 𝘗𝘭𝘢𝘺𝘦𝘳 1"`.

• `isComplete(): bool`
  𝘛𝘳𝘶𝘦 𝘧𝘰𝘳 𝘨𝘢𝘮𝘦 𝘣𝘦𝘪𝘯𝘨 𝘤𝘰𝘮𝘱𝘭𝘦𝘵𝘦, 𝘍𝘢𝘭𝘴𝘦 𝘰𝘵𝘩𝘦𝘳𝘸𝘪𝘴𝘦.

• `player1Point(): void`
  𝘊𝘢𝘭𝘭𝘦𝘥 𝘸𝘩𝘦𝘯 𝘗𝘭𝘢𝘺𝘦𝘳 1 𝘴𝘤𝘰𝘳𝘦𝘴 𝘢 𝘱𝘰𝘪𝘯𝘵.

• `player2Point(): void`
  𝘊𝘢𝘭𝘭𝘦𝘥 𝘸𝘩𝘦𝘯 𝘗𝘭𝘢𝘺𝘦𝘳 2 𝘴𝘤𝘰𝘳𝘦𝘴 𝘢 𝘱𝘰𝘪𝘯𝘵.

### Objective 2.
• Write unit tests to cover the code written above which test win conditions and other scenarios.

### Objective 3. (Optional)
• Create a web user interface where a point could be recorded when a player wins a point and which displays the current score.
