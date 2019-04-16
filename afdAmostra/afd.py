def afd_func(afd, palavra):
    estado_atual = afd['initial']
    for simbolo in palavra:
            if simbolo in afd["transitions"][estado_atual]:
                estado_atual = afd["transitions"][estado_atual][simbolo]
            else:
                return 'no'
    if estado_atual in afd['final']:
        return 'yes'
    else:
        return 'no'

palavras = ['abbbbbba', 'aba', 'aa', 'abbba', 'abba']
afd = {
	"type": "afd",
	"alphabet": ["a","b"],
	"states": ["q0","q1","q2","q3"],
	"initial": "q0",
	"transitions": {
		"q0": {"a":"q1"}, 
		"q1":{"a":"q3", "b":"q2"},
		"q2": {"b":"q1"}},
	"final": ["q3"]
}

for palavra in palavras:
    resp = afd_func(afd, palavra)
    print(resp)
    


