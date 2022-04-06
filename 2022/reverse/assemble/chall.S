	.file	"chall.S"
	.intel_syntax noprefix
	.text
	.section	.rodata
.enter_str:
	.string	"Enter the secret code:\n> "
.fmt:
	.string	"%s"
.welcome_str:
	.string	"Welcome!"
	.text
	.globl	main
	.type	main, @function
main:
.LFB6:
	push	rbp
	mov	rbp, rsp
	sub	rsp, 1056
	mov	-1044[rbp], edi
	mov	-1056[rbp], rsi
	mov	rax, fs:40
	mov	-8[rbp], rax
	xor	eax, eax
	lea	rax, .enter_str[rip]
	mov	rdi, rax
	mov	eax, 0
	call printf@PLT
	lea	rax, -1040[rbp]
	mov	rsi, rax
	lea	rax, .fmt[rip]
	mov	rdi, rax
	mov	eax, 0
	call __isoc99_scanf@PLT
	movzx	eax, BYTE PTR -1040[rbp]
	cmp	al, 67
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1039[rbp]
	cmp	al, 83
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1038[rbp]
	cmp	al, 52
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1037[rbp]
	cmp	al, 53
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1036[rbp]
	cmp	al, 55
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1035[rbp]
	cmp	al, 123
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1034[rbp]
	cmp	al, 49
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1033[rbp]
	cmp	al, 95
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1032[rbp]
	cmp	al, 108
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1031[rbp]
	cmp	al, 48
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1030[rbp]
	cmp	al, 118
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1029[rbp]
	cmp	al, 51
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1028[rbp]
	cmp	al, 95
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1027[rbp]
	cmp	al, 120
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1026[rbp]
	cmp	al, 56
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1025[rbp]
	cmp	al, 54
	jne	.exit_proc_label
	movzx	eax, BYTE PTR -1024[rbp]
	cmp	al, 125
	jne	.exit_proc_label
	lea	rax, .welcome_str[rip]
	mov	rdi, rax
	call	puts@PLT
.exit_proc_label:
	mov	edi, 0
	call	exit@PLT
.LFE6:
	.size	main, .-main
	.ident	"GCC: (GNU) 11.1.0"
	.section	.note.GNU-stack,"",@progbits
