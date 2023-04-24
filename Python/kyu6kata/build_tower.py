def mine_tower_builder(n_floors):
    result = []
    for i in range(n_floors):
        floor = ' '*(n_floors - (i + 1)) + '*' * (i * 2 + 1) + ' '*(n_floors - (i + 1))
        result.append(floor)
    return result

def best_tower_builder(n):
    return [("*" * (i*2-1)).center(n*2-1) for i in range(1, n+1)]