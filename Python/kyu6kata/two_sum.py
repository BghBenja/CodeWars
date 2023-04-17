def mine_two_sum(numbers, target):
    for i in range(len(numbers)):
        for j in range(i + 1, len(numbers)):
            if numbers[i] + numbers[j] == target:
                return [i, j]
            
def best_two_sum(nums, t):
    for i, x in enumerate(nums):
        for j, y in enumerate(nums):
            if i != j and x + y == t:
                return [i, j]