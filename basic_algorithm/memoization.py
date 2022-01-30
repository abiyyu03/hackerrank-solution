# initialize memoization's object
memo = {}
def fib(num):
    # cek if num is exist in memoization
    if num in memo:
        return memo[num]
    # this is call base case
    if num <= 2:
        return 1
    # save fibo result to memo variable where num is the key and result is the value
    memo[num] = fib(num-1) + fib(num-2)
    return memo[num]

def factorial(num):
    if num in memo:
        return memo[num]
    if num == 1:
        return 1
    memo[num] = num * factorial(num-1)
    return memo[num]
        
print(fib(4))
print(factorial(4))