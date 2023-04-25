def mine_spin_words(sentence):
    words = sentence.split()
    for index, word in enumerate(words):
        if len(word) >= 5:
            words[index] = word[::-1]
    return " ".join(words)

def best_spin_words(sentence):
    return " ".join([x[::-1] if len(x) >= 5 else x for x in sentence.split(" ")])