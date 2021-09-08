print("Welcome to my computer Quiz!")

playing = input("Do you want me to play?")

if playing.lower() != "yes":
    quit()

print("Okay ! lets play :)")
score = 0
answer = input("What does CPU stand for? ")
if answer.lower() == "central processing unit":
    print('correct!')
    score += 1
else:
    print('Incorrect!')
answer = input("what does GPU stand for? ")
if answer.lower() == "graphics processing unit":
    print('correct!')
    score += 1
else:
    print("incorrect!")
answer = input("what does Ram stand for?")
if answer.lower() == "Random Access Memory":
    print('correct!')
    score += 1
else:
    print('incorrect!')

print("You got " + str(score) + " Questions right!")
print("You got" + str((score / 3) * 100) + "%.")
# Success
