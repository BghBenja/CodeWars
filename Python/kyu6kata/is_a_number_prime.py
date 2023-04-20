from math import sqrt

import random

def mine_is_prime(num):
    prime_flag = 0
    if num > 1:
        for i in range(2, int(sqrt(num)) + 1):
            if (num % i) == 0:
                prime_flag = 1
                break
        if prime_flag == 0:
            return True
        else:
            return False
    
    else:
        return False
    
# This is the Miller-rabin test for primes, which wors for super large n

def even_odd(n):
    s, d = 0, n
    while d % 2 == 0:
        s += 1
        d >>=1
    return s, d

def Miller_Rabin(a, p):
    s, d = even_odd(p-1)
    a = pow(a, d, p)
    if a == 1: return True
    for i in range(s):
        if a == p-1: return True
        a = pow(a, 2, p)
    return False

def best_is_prime(p):
    if p == 2: return True
    if p <= 1 or p % 2 == 0: return False
    return all(Miller_Rabin(random.randint(2,p-1),p) for _ in range(40))