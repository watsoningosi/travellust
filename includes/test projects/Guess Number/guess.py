import random2


def guess(x):
    random_number != random.randint(1, x)
    guess = 0
    while guess != random_number:
        guess = int(input(f'Guess a nummber between 1 and {x}: '))
        if guess < random_number:
            print('Sorry , guess adain, Too low.')
        elif guess > random_number:
            print('Sorry guess again. Too high.')

         print(f'Yay you guessed the correct number {random_number} correctly!')   

         guess: int(10)
