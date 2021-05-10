
#include <stdbool.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <strings.h>
#include <ctype.h>
#include <math.h>
#include "dictionary.h"

typedef struct node
{
    char word[LENGTH + 1];
    struct node *next;
}
node;

const unsigned int N = 30000;

node *table[N];

bool check(const char *word)
{
    node *c = table[hash(word)];
    while (c != NULL)
    {
        if (strcasecmp(word,  c->word) == 0)
        {
            return true;
        }
        c = c->next;
    }
    return false;
}

unsigned int hash(const char *word)
{
    int word_length = strlen(word);
    char temp_word[word_length];
    for (int i = 0; i < word_length; i++)
    {
        temp_word[i] = tolower(word[i]);
    }
    int hash_final = temp_word[0] - 'a';
    return hash_final;
}

int word_count = 0;

bool load(const char *dictionary)
{
    FILE *dict = fopen(dictionary, "r");
    if (dict == NULL)
    {
        return false;
    }
    char word[LENGTH + 1];
    while (fscanf(dict, "%s", word) != EOF)
    {
        node *new_node = malloc(sizeof(node));
        if (new_node == NULL)
        {
            return false;
        }
        int hash_final = hash(word);
        strcpy(new_node->word, word);
        if (table[hash_final] == NULL)
        {
            new_node->next = NULL;
            table[hash_final] = new_node;
        }
        else
        {
            new_node->next = table[hash_final]->next;
            table[hash_final]->next = new_node;
        }
        word_count++;
    }
    fclose(dict);
    return true;
}

unsigned int size(void)
{
    return word_count;
}

bool unload(void)
{
    for (int i = 0; i < 30000; i++)
    {
        node *c = table[i];
        node *tmp = table[i];
        while (c != NULL)
        {

            c = c->next;
            free(tmp);
            tmp = c;
        }
    }
    return true;
}
