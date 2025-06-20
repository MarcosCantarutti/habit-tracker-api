# Habit tracker api

Tabela guardar os nossos hábitos

// Tabelas: ingês e no plural
Tabela: habits
Model: Habit => representação de um registro da Tabela
    - id
    -user_id = foreign id
    - title: string

Tabela: habit_logs
Model: HabitLog => colocar o dia que completamentos aquele hábitos
    - id
    - habit_id : foreign id
    - completed_at: datetime

Tabelas: users
Model: user

